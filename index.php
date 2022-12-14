<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-ToDoList</title>
    <!-- import -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app">
        <div class="container mt-2">
            <header class="d-flex justify-content-center">
                <h1>PHP ToDoList</h1>
            </header>
            <main>
                <div class="todosection mt-5">
                    <div class="container">
                        <ul class="list-group d-flex justify-content-center">
                            <li @click="changeDone(indice)" class="list-group-item d-flex justify-content-between" v-for="(todo , indice )  in listTodo" :id="todo.done === false ? 'todo-done-false' : ' '">{{ todo.text}} <i class="fa-solid fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="sectionsubmit mt-5">
                    <div class="container">
                        <input class="form-control" type="text" name="newTask" v-model="newTask" placeholder="Add a new Task ">
                        <button class="btn btn-info mt-5" @click="addTask">Aggiungi</button>
                    </div>
                </div>
            </main>
        </div>


    </div>



    <script src="script.js"></script>
</body>

</html>