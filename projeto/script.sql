CREATE TABLE estabelecimento (
    id SERIAL PRIMARY KEY,
    cnpj VARCHAR(14) UNIQUE NOT NULL,
    razaosocial VARCHAR(255) NOT NULL,
    nomefantasia VARCHAR(255) NOT NULL
);

CREATE TABLE projeto (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    data_inicial DATE NOT NULL,
    data_final DATE NOT NULL,
    estabelecimento_id INT NOT NULL,
    FOREIGN KEY (estabelecimento_id) REFERENCES estabelecimento(id)
);

CREATE TABLE produto (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    estado BOOLEAN NOT NULL,
    CONSTRAINT check_estado CHECK (estado IN (TRUE, FALSE))
);

CREATE TABLE produto_projeto (
    produto_id INT,
    projeto_id INT,
    PRIMARY KEY (produto_id, projeto_id),
    FOREIGN KEY (produto_id) REFERENCES produto(id),
    FOREIGN KEY (projeto_id) REFERENCES projeto(id)
);