# Rodrigo Stock Manager - Sistema de Controle de Estoque

## Sobre o Projeto

O **Rodrigo Stock Manager** é um sistema de controle de estoque desenvolvido para a loja **Gambiarra Motos**, com o objetivo de facilitar o gerenciamento de entradas, saídas e a verificação de possíveis desvios de itens no estoque. O sistema permite que o administrador e os funcionários acompanhem o fluxo de mercadorias de forma simples e eficiente, garantindo maior controle e transparência nas operações.

## Ferramentas de Desenvolvimento e Configuração

- **Laravel 11**: Framework PHP moderno para desenvolvimento web
- **Jetstream**: Kit de ferramentas para autenticação e funcionalidades básicas
- **Livewire**: Framework full-stack para Laravel que simplifica interfaces dinâmicas
- **TailwindCSS**: Framework CSS utilitário para design moderno e responsivo

## Principais Funcionalidades

- **Sistema de Autenticação**: Login diferenciado para administradores e funcionários.
- **Controle de Entrada e Saída**: Registro de entradas e saídas de itens do estoque.
- **Verificação de Desvios**: Cálculo automático para identificar possíveis desvios de estoque.
- **Dashboard Simples**: Visualização fácil do estoque atual e alertas de desvios.
- **Relatórios**: Geração de relatórios de movimentação de estoque.
- **Histórico de Movimentações**: Registro completo de todas as entradas e saídas.

## Tecnologias Utilizadas

- **Backend**: Node.js com Express
- **Frontend**: React.js ou Vue.js (para uma interface moderna e responsiva)
- **Banco de Dados**: PostgreSQL ou MySQL
- **Autenticação**: JWT (JSON Web Tokens)
- **Deploy**: Docker (opcional) para facilitar a implantação

## Requisitos do Sistema

- Node.js 16+
- PostgreSQL 13+ ou MySQL 8+
- Docker (opcional)

## Configuração do Ambiente

1. Clone o repositório
2. Execute `npm install` para instalar as dependências
3. Configure as variáveis de ambiente no arquivo `.env`
4. Execute as migrações do banco de dados com `npm run migrate`
5. Inicie o servidor de desenvolvimento com `npm run dev`

## Roadmap de Desenvolvimento

### Fase 1 - Fundação (Sprint 1-2)

- [ ] Setup inicial do projeto
- [ ] Configuração do ambiente Docker (opcional)
- [ ] Implementação da autenticação de usuários (admin e funcionários)
- [ ] Implementação do sistema de roles e permissões
- [ ] Sistema de logs para auditoria de ações
- [ ] Criação dos modelos básicos de dados (estoque, entradas, saídas)
- [ ] Setup inicial do frontend (dashboard básico)

### Fase 2 - Core Features (Sprint 3-4)

- [ ] Sistema de registro de entradas e saídas
- [ ] Implementação do cálculo de desvios de estoque
- [ ] Dashboard para visualização do estoque atual
- [ ] Sistema de notificações para desvios
- [ ] Geração de relatórios básicos

### Fase 3 - Aprimoramentos (Sprint 5-6)

- [ ] Melhorias no sistema de notificações
- [ ] Implementação de filtros e busca avançada no histórico
- [ ] Sistema de avaliações e feedback (opcional)
- [ ] Relatórios detalhados e analytics

### Fase 4 - Finalização (Sprint 7-8)

- [ ] Testes e correções de bugs
- [ ] Otimizações de performance
- [ ] Documentação completa
- [ ] Deploy em produção
- [ ] Monitoramento e ajustes finais

## Estrutura de Tasks

### Tasks Iniciais

1. Setup do ambiente de desenvolvimento
2. Configuração do Docker e serviços (opcional)
3. Implementação da autenticação
4. Criação dos modelos de dados básicos
5. Setup inicial do frontend

### Tasks Intermediárias

1. Desenvolvimento do core de controle de estoque
2. Sistema de registro de entradas e saídas
3. Implementação do cálculo de desvios
4. Dashboard administrativo
5. Sistema de notificações

### Tasks Finais

1. Otimizações de performance
2. Testes completos
3. Documentação
4. Deploy em produção
5. Monitoramento

## Contribuição

Para contribuir com o projeto:

1. Faça um fork do repositório
2. Crie uma branch para sua feature
3. Faça commit das alterações
4. Push para a branch
5. Abra um Pull Request

## Licença

Este projeto está sob a licença MIT.

## Contato

Email: suporte@gambiarramotos.com.br
