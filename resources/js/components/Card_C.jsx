import React from "react";
import { Card, Button } from "react-bootstrap";

function Card_C(props) {
    const firstName = props.name
    const email = props.email
    const id = props.id
    const rol_id=props.rol_id
    return (
        <Card style={{ width: '18rem' }}>
            {/*<Card.Img variant="top" src="holder.js/100px180" />*/}
            <Card.Body>
                <Card.Title>ID: {id}</Card.Title>
                <Card.Subtitle>Name: {name}</Card.Subtitle>
                <Card.Text>Email: {email}
                
                <p>Rol: {rol_id}</p>
                </Card.Text>

               {/* <Button variant="primary">Go Somewhere</Button> */}
            </Card.Body>
        </Card>
    )
}

export default Card_C;