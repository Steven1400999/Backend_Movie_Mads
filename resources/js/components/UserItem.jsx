import React, { useState, useEffect } from "react";
import { Card, Button, Modal } from "react-bootstrap";
import { useNavigate, useLocation } from 'react-router-dom';

function UserItem(props) {
    const name = props.name
    const email = props.email
    const id = props.id
    const rol_id = props.rol_id
    const password = props.password
    const navigate = useNavigate();
    const location = useLocation();

    const itemData = {
        id: props.id,
        name: props.name,
        email: props.email,
        password: props.password,
        rol_id: props.rol_id
    };



    const handleClose = () => {

    };

    return (
        <>



            <Card style={{ width: '18rem', borderColor: 'blue' }}>
                <Card.Body>
                    <Card.Title>ID: {id}</Card.Title>
                    <Card.Subtitle>Name: {name}</Card.Subtitle>
                    <Card.Text>Email: {email} </Card.Text>
                </Card.Body>
            </Card>
        </>
    )
}

export default UserItem;
