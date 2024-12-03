import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from '@inertiajs/inertia-react';
import SecondaryButton from "@/Components/SecondaryButton.jsx";
import PrimaryButton from "@/Components/PrimaryButton.jsx";

const EditToDo = ({ userId, toDoId }) => {

    const [title, setTitle] = useState('');
    const [description, setDescription] = useState('');
    const [completed, setCompleted] = useState(false);

    const handleSubmit = (e) => {
        e.preventDefault();

        Inertia.put(`/user/${userId}/todos/${toDoId}`, {
            title,
            description,
            completed,
        });
    };

    return (
        <div style={{margin: '30px'}}>
            <h1><b>Editar a tarefa</b></h1>
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
                        onChange={() => setCompleted(!completed)}
                    />
                </div>

                <div>
                    <PrimaryButton>Salvar</PrimaryButton>
                </div>
            </form>

            <div style={{marginTop: '20px'}}>
                <SecondaryButton>
                    <Link href={`/user/${userId}/todos`} className="btn">
                        Voltar
                    </Link>
                </SecondaryButton>
            </div>
        </div>
    )
}


export default EditToDo
