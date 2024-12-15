<template>
    <header>
        <title>Cadastrar pessoa</title>
    </header>
    <body>
        <div class="container">
            <div class="user-form-container">
                <h1 class="page-title">Adicionar Pessoa</h1>
                
                <form id="newUserForm" class="user-form">
                    <div class="form-field">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" required>              
                    </div>

                    <div class="form-field">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" id="tipo" v-model="tipo">
                            <option value="tipo-fisica">Física</option>
                            <option value="tipo-juridica">Jurídica</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="documento">Documento</label>
                        <input type="text" id="documento" name="documento" required>
                    </div>
                    
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-field">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" @click="alerta">Cadastrar</button>
                    </div>

                </form>    
            </div>
    </div>
    </body>
</template>

<script>
    
    export default {
    name: 'inclusao',
    
    data(){
        
            return {
                nome: null,
                tipo: null,
                documento: null,
                email: null,
                telefone: null
            }
        },
    
    methods: {
        alerta(){
            alert ("Dados inseridos com sucesso!");

            this.$router.push({ name: 'dashboard' })
        }
    }
    
    };
</script>

<style scoped>
/* Form styles */
.user-form-container {
    background-color: white;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    padding: 2rem;
    max-width: 32rem;
    margin: 0 auto;
}

.user-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-field {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-field label {
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--text-color);
}

.form-field input[type="text"],
.form-field input[type="email"],
.form-field input[type="tel"] {
    padding: 0.625rem;
    border: 1px solid var(--border-color);
    border-radius: 0.375rem;
    font-size: 1rem;
    transition: border-color 0.15s ease-in-out;
}

.form-field input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

/* Radio group styles */
.radio-group {
    display: flex;
    gap: 1.5rem;
    padding: 0.5rem 0;
}

.radio-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
    font-size: 0.875rem;
}

.radio-label input[type="radio"] {
    width: 1rem;
    height: 1rem;
    accent-color: var(--primary-color);
}

/* Form validation styles */
.form-field input:invalid {
    border-color: var(--error-color);
}

.form-field input:invalid:focus {
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
}

/* Form actions */
.form-actions {
    margin-top: 1rem;
    display: flex;
    justify-content: flex-end;
}

@media (max-width: 640px) {
    .user-form-container {
        padding: 1.5rem;
    }
    
    .radio-group {
        flex-direction: column;
        gap: 0.75rem;
    }
}
</style>