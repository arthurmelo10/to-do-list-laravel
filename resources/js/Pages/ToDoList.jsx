import React from "react";

const ToDoList = ({ todos }) => {
    console.log(todos)
    return (
        <div>
            <h1>Minhas Tarefas</h1>
            <ul>
                {todos .map(todo => (
                    <li key={todo.id}>{todo.title}</li>
                ))}
            </ul>
        </div>
    );
};

export default ToDoList
