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

    function getJobPosition(rol_id) {
        if (rol_id === 1) {
          return 'Administrator';
        } else if (rol_id === 2) {
          return 'Employee';
        } else {
          return 'Unknown';
        }
      }
    
      const jobPosition = getJobPosition(rol_id);

    return (
        <>
            <Card style={{ width: '18rem', borderColor: 'blue' }}>
                <Card.Body>
                    <Card.Title>ID: {id}</Card.Title>
                    <Card.Subtitle>Name: {name}</Card.Subtitle>
                    <Card.Text>Email: {email} </Card.Text>
                    <Card.Text>Job postion: {jobPosition} </Card.Text>

                </Card.Body>
            </Card>
        </>
    )
}

export default UserItem;
