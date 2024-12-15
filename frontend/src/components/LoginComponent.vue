<template>
    <!-- <router-link to="/dashboard">dashboard</router-link> -->
    <div>

        <div class="login-container">
          <div class="login-card">
            <div class="login-header">
              <h1>Apresenta-me</h1>
              <p>Digite seu e-mail e sua senha</p>
            </div>
            
            <form>
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-input" id="email">
              </div>
    
              <div class="form-group">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-input" id="senha">
              </div>
                    
              <button type="submit" class="login-button" @click="login">
                Entrar
              </button>
            </form>
          </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'login',

    data() {
        return {

        }
    },

    methods: {
        login() {
            this.$router.push({ name: 'dashboard' });
            
            const usuario = "email@email.com"
            const senha = "123456"


            // Verificação de usuário
            if (usuario == document.querySelector("#email").value && senha == document.querySelector("#senha").value) {

                this.$router.push({ name: 'dashboard' });
            }
            else {
                alert("Usuário ou senha inválido!");

                this.$router.push({ name: 'login' });
            }

        }
    }
}

</script>

<style scoped>

.login-container {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1rem;
  background: linear-gradient(135deg, #4a90e2 0%, #7e57c2 100%);
}

.login-card {
  background: white;
  width: 100%;
  max-width: 400px;
  border-radius: 16px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  padding: 2rem;
}

.login-header {
  text-align: center;
  margin-bottom: 2rem;
}

.login-header h1 {
  font-size: 1.875rem;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 0.5rem;
}

.login-header p {
  color: #666;
  font-size: 0.875rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-label {
  display: block;
  font-size: 0.875rem;
  font-weight: 500;
  color: #333;
  margin-bottom: 0.5rem;
}

.input-wrapper {
  position: relative;
}

.form-input {
  width: 100%;
  padding: 0.75rem 1rem;
  border: 1px solid #e2e8f0;
  border-radius: 8px;
  font-size: 1rem;
  transition: border-color 0.2s, box-shadow 0.2s;
}

.form-input:focus {
  outline: none;
  border-color: #4a90e2;
  box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
}

.form-input::placeholder {
  color: #a0aec0;
}

.login-button {
  width: 100%;
  padding: 0.75rem;
  background-color: #4a90e2;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.2s;
}

.login-button:hover {
  background-color: #357abd;
}

.login-button:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.3);
}

</style>