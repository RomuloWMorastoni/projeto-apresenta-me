<template>
    <!-- <router-link to="/">login</router-link> -->
    <header class="header">
        <div class="header-content">
            <h1>Pessoas cadastradas</h1>
        </div>
    </header>

    <body>
        
        <div class="action-button-container">
            <button type="submit" class="add-button" @click="incluir">Incluir pessoa</button>
        </div>
        <div class="table-container">
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Tipo (Física/Jurídica)</th>
                            <th>Documento</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-pessoas">
                        <tr>
                            <td>1</td>
                            <td>Romulo</td>
                            <td>Física</td>
                            <td>091.236.359-24</td>
                            <td>romulo_rsl@hotmail.com</td>
                            <td>(47)98811-1044</td>
                            <td>
                            <button class="action-button view" title="Visualizar">
                                👁
                            </button>
                            </td>
                            <td>
                            <button class="action-button edit" title="Editar">
                                ✏️
                            </button>
                            </td>
                            <td>
                            <button class="action-button delete" title="Excluir">
                                🗑️
                            </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</template>

<script>

import { useRouter } from 'vue-router';

export default {
    name: 'dashboard',

    data() {
        
        return {

        }
    },
    methods: {
        incluir() {
            this.$router.push({ name: 'inclusao' })
        },

        listarPessoas() {
            const listaPessoas = [

                {
                    "id": "1",
                    "nome": "João",
                    "tipo": "Física",
                    "documento": "999.999.999-00",
                    "email": "admin@gmail.com",
                    "telefone": "4799999-9999"
                },
                {
                    "id": "2",
                    "nome": "Maria",
                    "tipo": "Física",
                    "documento": "999.999.999-00",
                    "email": "admin@gmail.com",
                    "telefone": "4799999-9999"
                },
                {
                    "id": "3",
                    "nome": "Emrpresa do João",
                    "tipo": "Jurídica",
                    "documento": "999.999.999-00",
                    "email": "admin@gmail.com",
                    "telefone": "4799999-9999"
                },
                {
                    "id": "4",
                    "nome": "Empresa da Maria",
                    "tipo": "Jurídica",
                    "documento": "999.999.999-00",
                    "email": "admin@gmail.com",
                    "telefone": "4799999-9999"
                },

            ];
                this.carregaTabelaConsultaPessoa(listaPessoas);
                return listaPessoas;
        },

        carregaTabelaConsultaPessoa(aListaPessoas) {
            
            if (!Array.isArray(aListaPessoas)) {
                aListaPessoas = new Array(aListaPessoas);
            }

            const tabela = document.querySelector("#tabela-pessoas");
            tabela.innerHTML = "";
            aListaPessoas.forEach(function (data, key) {
                const codigo = data.id;
                const nome = data.nome;
                const tipo = data.tipo;
                const documento = data.documento;
                const email = data.email;
                const telefone = data.telefone;

                const acoes = `<div class="acoes text-center">
                                    <button class="btn btn-warning" onclick="alterarPessoa(` +
                                    codigo +
                                    `)">Alterar</button>
                                    <button  class="btn btn-danger" onclick="excluirPessoa(` +
                                    codigo +
                                    `)">Excluir</button>
                                    <button  class="btn btn-primary" onclick="visualizarPessoa(` +
                                    codigo +
                                    `)">Visualizar</button>
                                </div>
                                `
                ;

                tabela.innerHTML +=
                    `
        <tr>
            <td>` +
                    codigo +
                    `</td>
            <td style="text-align: left;">` +
                    nome +
                    `</td>
            <td style="text-align: right;">` +
                    tipo +
                    `</td>
            <td>` +
                    documento +
                    `</td>
            <td>` +
                    email +
                    `</td>
            <td>` +
                    telefone +
                    `</td>
            <td>` +
                    acoes +
                    `</td>
        </tr>
        `;
            });
        },

    },
    
    mounted() {
    
    this.listarPessoas();
    },
}

</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  line-height: 1.5;
  background-color: #f9fafb;
}

/* Layout */
.container {
  min-height: 100vh;
}

/* Header styles */
.header {
  background-color: white;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.header-content {
  max-width: 1280px;
  margin: 0 auto;
  padding: 1.5rem 1rem;
}

.header h1 {
  font-size: 1.5rem;
  font-weight: 600;
  color: #111827;
}

/* Main content */
.main-content {
  max-width: 1280px;
  margin: 0 auto;
  padding: 2rem 1rem;
}

/* Add button styles */
.action-button-container {
  margin-bottom: 1.5rem;
}

.add-button {
  display: inline-flex;
  align-items: center;
  padding: 0.5rem 1rem;
  background-color: #4f46e5;
  color: white;
  border: none;
  border-radius: 0.375rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.2s;
}

.add-button:hover {
  background-color: #4338ca;
}

.plus-icon {
  margin-right: 0.5rem;
  font-size: 1.25rem;
}

/* Table styles */
.table-container {
  background-color: white;
  border-radius: 0.5rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.table-wrapper {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th {
  padding: 0.75rem 1.5rem;
  text-align: left;
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: uppercase;
  color: #6b7280;
  background-color: #f9fafb;
  border-bottom: 1px solid #e5e7eb;
}

td {
  padding: 1rem 1.5rem;
  font-size: 0.875rem;
  color: #111827;
  border-bottom: 1px solid #e5e7eb;
}

tr:hover {
  background-color: #f9fafb;
}

/* Badge styles */
.badge {
  display: inline-flex;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 500;
}

.badge.admin {
  background-color: #f3e8ff;
  color: #6b21a8;
}

.badge.user {
  background-color: #dcfce7;
  color: #15803d;
}

/* Action buttons */
.action-button {
  background: none;
  border: none;
  cursor: pointer;
  padding: 0.25rem;
  font-size: 1.25rem;
}

.action-button.view:hover {
  color: #2563eb;
}

.action-button.edit:hover {
  color: #4f46e5;
}

.action-button.delete:hover {
  color: #dc2626;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .header-content,
  .main-content {
    padding: 1rem;
  }

  td, th {
    padding: 0.75rem;
  }
}
</style>