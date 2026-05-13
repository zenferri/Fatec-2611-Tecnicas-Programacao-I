# Lógica da pasta ClasseAssociativa
_Exported on 12/05/2026 at 12:33:00 BRT from Cursor (3.3.30)_

---

**User**

explique a lógica dentro da pasta ClasseAssociativa

---

**Cursor**

Lendo os arquivos da pasta `ClasseAssociativa` para explicar a lógica.



## O que a pasta modela

A pasta **`ClasseAssociativa`** ilustra o padrão de **classe associativa** no modelo orientado a objetos: quando dois conceitos se relacionam de forma **muitos-para-muitos** (N:N) e a **própria relação** tem dados próprios, em vez de só “ligar” ator e filme, você cria uma classe que **representa a ligação** e guarda esses dados.

No domínio “cinema”:

- Um **ator** participa de vários **filmes**.
- Um **filme** tem vários **atores**.
- O que não cabe só em `Ator` nem só em `Filme` é, por exemplo, **o nome do personagem** — isso pertence à **atução** daquele ator **naquele** filme.

---

## As três classes

**`Ator`** — entidade “ator”: nome, nacionalidade e um array `$filmes` previsto para guardar filmes ligados a esse ator (navegação do lado do ator). O `index.php` atual **não** preenche esse array; ele só usa `Atuacao` para demonstrar o vínculo.

**`Filme`** — entidade “filme”: título, ano e array `$atores` para o lado inverso. O setter `setAtores` na prática **acrescenta** um item ao array (`$this->atores[] = $atores`), não substitui o array inteiro — útil se quiser ir adicionando atores um a um.

**`Atuacao`** — a **classe associativa**: ela referencia **um** `Ator` e **um** `Filme` e acrescenta o atributo da relação **`$papel`** (ex.: “Jack Dawson”). Assim, “Leonardo DiCaprio em Titanic como Jack Dawson” fica modelado como **um objeto `Atuacao`**, não como um atributo solto em `Ator` ou `Filme`.

---

## O fluxo no `index.php`

1. Cria `Ator` e `Filme` como objetos independentes.
2. Cria `Atuacao` passando **papel**, **ator** e **filme** — a `Atuacao` é o “elo” tipado entre os dois.
3. Exibe tudo partindo de `$atuacao1`: `getAtor()`, `getFilme()`, `getPapel()`, encadeando getters (`getAtor()->getNome()`, etc.).

Resumindo: **`Ator` e `Filme` são as extremidades da relação N:N; `Atuacao` é a classe que materializa cada par (ator, filme) e os atributos específicos desse par**, que é exatamente o papel de uma classe associativa no diagrama de classes.

