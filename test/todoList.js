class TodoList { constructor() {
    this.tasks = [];
    this.nextId = 1; }
    addTask(text) {
        const task = { id: this.nextId++, text: text, completed: false }; this.tasks.push(task);
    }

    getTasks() {
        return this.tasks;
    }

    toggleTaskCompleted(id) {
        const task = this.tasks.find(task => task.id === id); if (task) {
        task.completed = !task.completed; }
    }

    removeTask(id) {
        this.tasks = this.tasks.filter(task => task.id !== id);
    }}
    module.exports = TodoList;