import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from '@inertiajs/inertia-react';

const CreateToDo = ({ userId }) => {

    const [title, setTitle] = useState('');
    const [description, setDescription] = useState('');
    const [completed, setCompleted] = useState(false);

    const handleSubmit = (e) => {
        e.preventDefault();

        Inertia.post(`/user/${userId}/createTodo`, {
            title,
            description,
            completed,
            user_id: userId
        });
    };

    return (
        <div>
            <h1><b>Crie uma nova tarefa</b></h1>
            <form onSubmit={handleSubmit}>
                <div style={{marginBottom: '20px'}}>
                    <label>Título: </label>
                    <input
                        type="text"
                        value={title}
                        onChange={(e) => setTitle(e.target.value)}
                        placeholder="Nome da tarefa"
                        required
                    />
                </div>

                <div style={{marginBottom: '20px'}}>
                    <label>Descrição: </label>
                    <textarea
                        value={description}
                        onChange={(e) => setDescription(e.target.value)}
                        placeholder="Descreve sua tarefa"
                        required
                    />
                </div>

                <div style={{marginBottom: '20px'}}>
                    <label>Status: </label>
                    <input
                        type="checkbox"
                        checked={completed}
                        onChange={() => setStatus()}
                    />
                </div>

                <div>
                    <button type="submit">Criar</button>
                </div>
            </form>

            <div style={{marginTop: '20px'}}>
                <Link href={`/user/${userId}/todos`} className="btn">
                    Voltar
                </Link>
            </div>
        </div>
    )
}


export default CreateToDo