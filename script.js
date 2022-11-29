// Collego Vue
const { createApp } = Vue;

createApp({
  data() {
    return {
      listTodo: [],
      newTask: "",
    };
  },
  created() {
    axios.get("server.php").then((resp) => {
      this.listTodo = resp.data;
      console.log(this.listTodo);
    });
  },
  methods: {
    addTask() {
      this.listTodo.push({
        text: this.newTask,
        done: false,
      });
      console.log(this.listTodo);
      this.newTask = "";
    },
  },
}).mount("#app");
