Markdown
# 📑 GLPI - Documentação do Ambiente de Infraestrutura (Docker)

Este repositório contém a infraestrutura como código (Docker Compose) e scripts de suporte para o servidor de chamados GLPI.

| Informação | Detalhe |
| :--- | :--- |
| **Servidor Host** | `10.40.8.37` |
| **Ambiente** | Ubuntu Linux |
| **Última Atualização** | Julho de 2026 |

---

## 🚀 1. Acesso ao GLPI

* **URL de Acesso:** [http://10.40.8.37](http://10.40.8.37)
* **Porta Host:** `80` (HTTP Padrão)
* **Usuário Padrão:** `glpi`
* **Senha:** *(Definida na configuração inicial e armazenada de forma segura no arquivo `.env` local)*

---

## 📂 2. Estrutura de Diretórios e Volumes

Toda a stack de produção está centralizada no diretório home do usuário do sistema:

* **Pasta da Instalação Atual (CORRETA):** `/home/glpi/glpi-docker/glpi-docker/`
* **Arquivo Docker Compose:** `/home/glpi/glpi-docker/glpi-docker/docker-compose.yml`
* **Variáveis de Ambiente:** `/home/glpi/glpi-docker/glpi-docker/.env`
* **Persistência de Dados (Volumes):**
  * **Banco de Dados:** `/home/glpi/glpi-docker/glpi-docker/storage/mysql/`
  * **Arquivos do GLPI:** `/home/glpi/glpi-docker/glpi-docker/storage/glpi/`
* **Estrutura de Backups:**
  * **Diretório dos Backups:** `/home/glpi/backups/`
  * **Script Automatizado:** `/home/glpi/backups/backup_glpi.sh`

### 🐳 Containers Ativos
* **Banco de Dados:** `glpi-docker-db-1` (Imagem: `mysql:latest` / Versão 9.x)
* **Aplicação GLPI:** `glpi-docker-glpi-1` (Imagem: `glpi/glpi:latest`)

---

## 🗄️ 3. Informações do Banco de Dados (MySQL)

* **Host Interno (Docker Network):** `db`
* **Porta Interno:** `3306`
* **Nome do Banco:** `glpi`
* **Usuário da Aplicação:** `glpi`
* **Senha da Aplicação:** `glpi`

> ⚠️ **ATENÇÃO MÁXIMA:** A senha do usuário `root` do MySQL é gerada aleatoriamente na inicialização do container. Para manutenções manuais e dumps, utilize sempre o usuário `glpi`.

---

## 🛠️ 4. Comandos Úteis de Operação

Sempre navegue até a pasta correta antes de gerenciar os containers:
```bash
cd /home/glpi/glpi-docker/glpi-docker/
