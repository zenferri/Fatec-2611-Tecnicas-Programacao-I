# Telefones roteando por avaliação
_Exported on 12/05/2026 at 20:04:07 BRT from Cursor (3.3.30)_

---

**User**

Como que eu mostro os telefones roteando por avaliacao1? Eu comentei o echo em index.php porque não consigo chegar no telefone do chef

---

**Cursor**

Analisando a estrutura das classes e do `index.php` para explicar como acessar o telefone do chef a partir da avaliação.



O problema não é o `echo` em si: é **por qual objeto você chega no chef**.

## Por que `getReceita()->getChef()` não funciona

No `index.php`, a receita é criada só com nome e ingredientes:

```14:14:/Applications/XAMPP/xamppfiles/htdocs/fatec/tec1/Revisao_P1/Ex02/index.php
$receita1 = new Receita("Bolovo", "ovo com carne e massa");
```

No construtor de `Receita`, o chef é opcional e, se não for passado, fica `null`:

```5:13:/Applications/XAMPP/xamppfiles/htdocs/fatec/tec1/Revisao_P1/Ex02/receita.class.php
    public function __construct(
        protected string $nome = "",
        protected string $ingredientes = "",

        // Associação com Chef
        private ?Chef $chef = null,
        // gabarito da professora - colocou array de avaliadores
        private array $avaliadores = array()
    ) {}
```

Ou seja, **`$receita1` não tem chef ligado**. Por isso `$avaliacao1->getReceita()->getChef()` devolve **`null`** e qualquer `->getTelefones()` em cima disso quebra (ou dá erro, dependendo da versão do PHP).

O chef **está** na avaliação, não na receita nesse cenário:

```16:16:/Applications/XAMPP/xamppfiles/htdocs/fatec/tec1/Revisao_P1/Ex02/index.php
$avaliacao1 = new Avaliacao(9.5, $chef1, $receita1, $avaliador1);
```

## Caminho certo: chef pela avaliação

Use o chef que já vem em `Avaliacao`:

- `$avaliacao1->getChef()` → `Chef`
- `$avaliacao1->getChef()->getTelefones()` → **array** de `Telefone` (herdado de `Pessoa`)

```24:27:/Applications/XAMPP/xamppfiles/htdocs/fatec/tec1/Revisao_P1/Ex02/pessoa.class.php
    public function getTelefones()
    {
        return $this->telefones;
    }
```

`getTelefones()` não é uma string: é um **array de objetos** `Telefone`. Por isso um único `echo` com `{$...}` costuma mostrar só `Array` ou não ser o que você quer. O usual é **percorrer** os telefones e montar a saída com `getDdd()` e `getNumero()` de cada um.

Exemplo de ideia (você adapta ao HTML que quiser):

```php
foreach ($avaliacao1->getChef()->getTelefones() as $tel) {
    echo "({$tel->getDdd()}) {$tel->getNumero()}<br>";
}
```

Assim você “roteia pela avaliação” no sentido: **avaliação → chef → lista de telefones → cada telefone**.

## Se no futuro o chef vier só pela receita

Aí seria preciso **associar** o chef à receita, por exemplo passando `$chef1` no construtor de `Receita` (se o construtor permitir) ou chamando `setChef($chef1)` depois. Enquanto `Receita` não tiver chef definido, **`getReceita()->getChef()`** continua sendo caminho errado para esse `index.php`.

---

**Observação:** em `avaliacao.class.php`, o setter `setChef` usa `$$chef` em vez de `$chef`; isso é bug e pode dar problema se você usar o setter. Em modo Ask não altero o arquivo; se quiser correção automática, use o modo Agent.

Resumindo: use **`$avaliacao1->getChef()->getTelefones()`** e um **`foreach`** para exibir cada telefone, em vez de passar pela receita, enquanto a receita não tiver chef vinculado.

