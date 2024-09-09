const TodoList = require('./todoList');

test('should add a task to the todo list', () => {
const todoList = new TodoList();
todoList.addTask('Buy milk');
expect(todoList.getTasks()).toEqual([{ id: 1, text: 'Buy milk', completed: false }]);
});

test('should toggle task completion status', () => {
    const todoList = new TodoList();
    todoList.addTask('Buy milk');
    todoList.toggleTaskCompleted(1);
    expect(todoList.getTasks()).toEqual([{ id: 1, text: 'Buy milk', completed: true }]);
});

test('should remove a task from the todo list', () =>
    { const todoList = new TodoList();
        todoList.addTask('Buy milk');
        todoList.removeTask(1);
        expect(todoList.getTasks()).toEqual([]);
});