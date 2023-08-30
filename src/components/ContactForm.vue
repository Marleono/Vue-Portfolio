<template>
    <base-dialog :show="isLoading"  fixed title="Sending...">
        <base-spinner></base-spinner>
    </base-dialog>
    <div class="contact_me">
        <form @submit.prevent="submitForm">
            <label for="name">Your name:</label>
            <input type="text" name="name" v-model.trim="userName">
            <label for="email">Your email:</label>
            <input type="email" name="email" v-model.trim="userEmail">
            <label for="message">Write me a message:</label>
            <textarea class="msg" type="text" name="message" v-model="userMessage"></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</template>

<script>
import BaseDialog from './BaseDialog.vue'
import BaseSpinner from './BaseSpinner.vue'
export default {
    components: {
        BaseDialog,
        BaseSpinner
    },
    data() {
        return {
            userName: '',
            userEmail: '',
            userMessage: '',
            isLoading: false
        }
    },
    methods: {
        async submitForm() {
            if(!this.userName || !this.userEmail || !this.userMessage) {
                alert('Please fill up the form')
            } else {
                let formData = {
                    name: this.userName,
                    email: this.userEmail,
                    message: this.userMessage
                }
                this.isLoading = true;
                let response = await fetch('https://mariamleo.spb.ru/sendmail.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'

                    },
                    body: JSON.stringify(formData)
                })
                this.userName = '';
                this.userEmail = '';
                this.userMessage = '';
                this.isLoading = false;
                if (response.ok) {
                    let result = await response.json();
                    alert(result.message)
                } else {
                    alert('Error');
                    console.log(formData);
                }
            }
        }
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');
    .contact_me {
        min-width: 30%;
        border: 1px solid rgb(242, 158, 76);
        border-radius: 15px;
        box-shadow: 12px 12px 2px 1px rgb(242, 158, 76, .5);
        padding: 2rem 2rem;
        margin-bottom: 49px;
    }
    form {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-family: 'Itim', cursive;
        font-size: 1.5rem;
        color: rgb(53, 53, 53);
    }
    input,
    textarea {
        border-radius: 15px;
        padding: .5rem;
        border: none;
    }
    .msg {
        min-height: 83px;
    }
    button {
        cursor: pointer;
        max-width: 33%;
        margin: 0 auto;
        padding: .7rem 1rem;
        border-radius: 7px;
        border: none;
        background-color: rgb(211, 179, 245);
        box-shadow: 0 6px rgb(164, 135, 196);
        font-family: 'Itim', cursive;
        font-size: 1.5rem;
        color: rgb(53, 53, 53);
    }
    button:active {
        box-shadow: 0 1px rgb(164, 135, 196);
        transform: translateY(2px);
    }
    @media (max-width: 1556px) {
        .contact_me {
            min-width: 40%;
        }
    }
    @media (max-width: 1248px) {
        .contact_me {
            min-width: 50%;
        }
    }
    @media (max-width: 936px) {
        .contact_me {
            min-width: 60%;
        }
    }
    @media (max-width: 628px) {
        .contact_me {
            min-width: 70%;
        }
        .button {
            max-width: 40%;
        }
    }
    @media (max-width: 440px) {
        .contact_me {
            min-width: 80%;
        }
        button {
            max-width: 40%;
            font-size: 1.2rem;
        }
        form {
            font-size: 1rem;
        }
    }
    @media (max-width: 280px) {
        .contact_me {
            max-width: 50%;
        }
        button {
            max-width: 46%;
            font-size: .7rem;
        }
        form {
            font-size: 1rem;
        }
    }
</style>
