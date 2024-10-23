import React from "react";

const ToDo = ({ todo }) => {
    return (
        <div>
            <div>
                <div>
                    <h2>Título: {todo.title}</h2>
                    <p>Descrição: {todo.description}</p>
                    <p>Completo: {todo.completed ? 'Completed' : 'Pending'}</p>
                </div>
            </div>
        </div>
    );
};

export default ToDo
