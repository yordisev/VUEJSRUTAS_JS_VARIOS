var url = "../../models/inicio/cruduser.php";
new Vue({
    el: '#myapp',
    data() {
        return {
            usuarios: [],
            dialog: false,
            operacion: '',
            userid: 1,
            stmessage: '',
            res: '',
            usuario: {
                id: null,
                username: "",
                name: "",
                email: ""
            }
        }
    },
    created() {
        this.mostrar()
    },
    methods: {
        //MÉTODOS PARA EL CRUD
        mostrar: function() {
            axios.post(url, {
                    opcion: 1
                })
                .then(response => {
                    this.usuarios = response.data;
                })
        },
        crear: function() {
            axios.post(url, {
                    opcion: 2,
                    username: this.usuario.username,
                    name: this.usuario.name,
                    email: this.usuario.email
                })
                .then(response => {
                    this.mostrar();
                });
            this.usuario.username = "";
            this.usuario.name = "";
            this.usuario.email = "";
        },
        editar: function(id, username, name, email) {
            axios.post(url, {
                    opcion: 3,
                    id: this.usuario.id,
                    username: this.usuario.username,
                    name: this.usuario.name,
                    email: this.usuario.email
                })
                .then(response => {
                    this.mostrar();
                });
        },
        borrar: function(id) {
            Swal.fire({
                title: '¿Confirma eliminar el registro?',
                confirmButtonText: `Confirmar`,
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.post(url, {
                        opcion: 4,
                        id: id
                    }).then(response => {
                        this.mostrar();
                    });
                    Swal.fire('¡Eliminado!', '', 'success')
                } else if (result.isDenied) {}
            });
        },

        //Botones y formularios
        guardar: function() {
            if (this.operacion == 'crear') {
                this.crear();
            }
            if (this.operacion == 'editar') {
                this.editar();
            }
            this.dialog = false;
        },
        formNuevo: function() {
            this.dialog = true;
            this.operacion = 'crear';
            this.usuario.username = '';
            this.usuario.name = '';
            this.usuario.email = '';
        },
        formEditar: function(id, username, name, email) {
            //capturamos los datos del registro seleccionado y los mostramos en el formulario
            this.usuario.id = id;
            this.usuario.username = username;
            this.usuario.name = name;
            this.usuario.email = email;
            this.dialog = true;
            this.operacion = 'editar';
        }
    }
});