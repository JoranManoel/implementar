# AVALIAÇÃO PRÁTICA — DESENVOLVIMENTO E IMPLANTAÇÃO DE SISTEMAS

**Curso:** Técnico em Desenvolvimento de Sistemas
**Unidade Curricular:** Desenvolvimento/Implantação de Sistemas
**Tema:** Implantação de sistema web em ambiente de produção
**Tempo:** 2h30
**Valor:** 100 pontos

---

## 1. ORIENTAÇÕES GERAIS

Você foi contratado como técnico responsável pela implantação de um sistema web desenvolvido pela empresa **TechSolutions**.

O sistema foi desenvolvido e testado em ambiente de desenvolvimento. Agora, a empresa necessita disponibilizá-lo em um ambiente destinado aos usuários finais.

Seu trabalho será preparar o ambiente, configurar o banco de dados, disponibilizar o sistema, realizar os testes necessários e documentar o processo de implantação.

### Tecnologias utilizadas

* PHP
* MySQL
* HTML
* CSS
* JavaScript
* Apache

### Regras

1. Utilize somente os recursos disponibilizados pelo avaliador.
2. Não utilize internet durante a avaliação.
3. Não altere a estrutura do sistema sem necessidade.
4. Faça cópias de segurança antes de realizar alterações importantes.
5. Registre os procedimentos realizados durante a implantação.
6. Ao identificar um problema, procure diagnosticar sua causa antes de realizar alterações.
7. Ao final da avaliação, o sistema deverá estar funcional.

---

# 2. CONTEXTUALIZAÇÃO

A empresa **TechSolutions** desenvolveu o sistema **HelpTech**, uma aplicação web destinada ao gerenciamento de chamados de suporte técnico.

O sistema permite que os funcionários da empresa registrem problemas relacionados aos computadores, sistemas e infraestrutura de TI.

A equipe de desenvolvimento concluiu o sistema e entregou os seguintes arquivos para a equipe responsável pela implantação:

```text
helptech/
│
├── index.php
├── login.php
├── dashboard.php
├── chamados/
├── usuarios/
├── config/
├── css/
├── js/
└── banco/
    └── helptech.sql
```

A empresa solicitou que o sistema fosse disponibilizado no ambiente de produção.

Você é o responsável pela implantação.

---

# 3. DESAFIO

Realize a implantação do sistema **HelpTech**, seguindo as etapas abaixo.

## ETAPA 1 — Preparação do ambiente

**10 pontos**

Verifique se o ambiente disponibilizado possui os recursos necessários para executar o sistema.

Verifique:

* servidor Apache;
* PHP;
* MySQL;
* extensão necessária para conexão com banco de dados;
* funcionamento do servidor web.

Registre as versões encontradas.

### Registro esperado

```text
Servidor Web:
Versão do PHP:
Versão do MySQL:
Extensões verificadas:
Diretório utilizado para publicação:
```

---

# ETAPA 2 — Banco de dados

**15 pontos**

Utilize o arquivo:

```text
banco/helptech.sql
```

para preparar o banco de dados do sistema.

Você deverá:

1. Criar o banco de dados;
2. Executar o script SQL;
3. Verificar se as tabelas foram criadas;
4. Verificar se os dados iniciais foram inseridos;
5. Confirmar que o banco pode ser acessado pelo sistema.

Registre:

```text
Nome do banco:
Quantidade de tabelas:
Quantidade de registros iniciais:
Usuário utilizado:
```

---

# ETAPA 3 — Configuração do sistema

**15 pontos**

Localize o arquivo responsável pela conexão entre o sistema e o banco de dados.

Configure corretamente:

```text
Servidor:
Usuário:
Senha:
Banco de dados:
Porta:
```

Não altere informações que não estejam relacionadas à configuração necessária para a implantação.

Após realizar a configuração, teste a conexão.

---

# ETAPA 4 — Publicação do sistema

**20 pontos**

Disponibilize o sistema no servidor web.

O sistema deverá ser acessível pelo navegador utilizando o endereço disponibilizado pelo avaliador.

Exemplo:

```text
http://localhost/helptech
```

ou

```text
http://localhost:8080/helptech
```

Verifique:

* carregamento da página inicial;
* acesso à tela de login;
* acesso ao banco de dados;
* carregamento dos arquivos CSS;
* carregamento dos arquivos JavaScript.

---

# ETAPA 5 — Testes pós-implantação

**15 pontos**

Após a implantação, realize os seguintes testes.

### Teste 1 — Login

Utilize um usuário disponibilizado pelo avaliador.

Verifique se o sistema permite autenticação.

### Teste 2 — Listagem

Acesse a área de chamados e verifique se os registros existentes são apresentados.

### Teste 3 — Cadastro

Cadastre um novo chamado.

Preencha:

```text
Título: Computador não inicia
Descrição: O computador apresenta falha durante a inicialização.
Prioridade: Alta
```

### Teste 4 — Alteração

Altere a prioridade do chamado criado.

### Teste 5 — Exclusão

Exclua o chamado utilizado no teste.

### Teste 6 — Persistência

Atualize a página e confirme que as alterações realizadas continuam armazenadas no banco de dados.

Registre o resultado:

| Teste        | Resultado | Observação |
| ------------ | --------- | ---------- |
| Login        |           |            |
| Listagem     |           |            |
| Cadastro     |           |            |
| Alteração    |           |            |
| Exclusão     |           |            |
| Persistência |           |            |

---

# ETAPA 6 — Diagnóstico de problema

**15 pontos**

Durante a implantação, você identificou que o sistema apresenta uma falha.

Ao tentar acessar a aplicação, é apresentada uma mensagem semelhante a:

```text
Erro ao conectar ao banco de dados.
Access denied for user 'helptech'@'localhost'
```

Analise a situação.

Responda:

### 6.1

Qual componente apresenta o problema?

### 6.2

Qual é a provável causa da falha?

### 6.3

Qual procedimento deve ser realizado para solucionar o problema?

### 6.4

Como você verificaria se a correção funcionou?

### 6.5

Qual seria o risco de simplesmente alterar vários arquivos do sistema sem realizar um diagnóstico?

---

# ETAPA 7 — Documentação da implantação

**10 pontos**

Elabore uma documentação resumida contendo:

### 1. Identificação

```text
Sistema:
Data:
Responsável:
Ambiente:
```

### 2. Ambiente

Informe:

```text
Sistema operacional:
Servidor web:
PHP:
MySQL:
```

### 3. Banco de dados

Informe:

```text
Banco:
Servidor:
Porta:
Usuário:
```

### 4. Procedimentos realizados

Descreva, em ordem, as principais etapas utilizadas para realizar a implantação.

### 5. Testes

Informe quais testes foram realizados e seus resultados.

### 6. Problemas encontrados

Descreva os problemas identificados durante a implantação e como foram solucionados.

---

# 4. CHECKLIST FINAL

Antes de entregar a avaliação, confirme:

[ ] O servidor web está funcionando.

[ ] O PHP está funcionando.

[ ] O MySQL está funcionando.

[ ] O banco de dados foi criado.

[ ] As tabelas foram importadas.

[ ] Os dados iniciais estão disponíveis.

[ ] A conexão do sistema com o banco está funcionando.

[ ] O sistema está acessível pelo navegador.

[ ] O login funciona.

[ ] Os registros podem ser consultados.

[ ] Um chamado pode ser cadastrado.

[ ] Um chamado pode ser alterado.

[ ] Um chamado pode ser excluído.

[ ] Os dados permanecem armazenados após atualização.

[ ] O problema encontrado foi diagnosticado.

[ ] A documentação foi preenchida.

---

# 5. ENTREGA

Ao finalizar, entregue ao avaliador:

1. O sistema implantado;
2. O banco de dados configurado;
3. O registro dos testes;
4. O diagnóstico do problema;
5. A documentação da implantação.

O sistema será considerado concluído somente quando estiver funcional e os procedimentos realizados estiverem documentados.

---

# 6. CRITÉRIOS DE AVALIAÇÃO

| Critério                           | Pontuação |
| ---------------------------------- | --------: |
| Preparação do ambiente             |        10 |
| Configuração do banco de dados     |        15 |
| Configuração do sistema            |        15 |
| Publicação/implantação             |        20 |
| Testes pós-implantação             |        15 |
| Diagnóstico e solução de problemas |        15 |
| Documentação                       |        10 |
| **TOTAL**                          |   **100** |
