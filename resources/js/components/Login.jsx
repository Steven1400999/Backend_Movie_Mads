import React, { useState, useContext } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import { Button } from "react-bootstrap";
import Form from "react-bootstrap/Form";
import fondologin from '../../../public/fondologin.jpg'
import { Context } from "../Context";

function Login() {

    const { token, setGlobalToken } = useContext(Context);
    const {  setGlobalRol_id } = useContext(Context);


    const [formValue, setformValue] = useState({
        email: '',
        password: ''
    })
    const navigate = useNavigate();
    const onChange = (e) => {
        e.persist();
        setformValue({ ...formValue, [e.target.name]: e.target.value });
    }

    const handleSubmit = (e) => {
        if (e && e.preventDefault()) e.preventDefault();
        const formData = new FormData();
        formData.append("email", formValue.email)
        formData.append("password", formValue.password)
        axios.post("http://localhost/Proyecto_Inventario/public/api/login",
            formData,
            {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    Accept: 'application/json'

                    
                }
            }
        ).then(response => {
            console.log('response');
            console.log(response);
            console.log("Rol_id: ", response.data.rol_id);
            console.log(response.data.token);
            

            setGlobalToken(response.data.token);
            setGlobalRol_id(response.data.rol_idl);


            const rol_id = response.data.rol_id;
            if (rol_id == 1) {

                navigate("/Proyecto_Inventario/public/Admin");



            } else if (rol_id == 2) {

                navigate("/Proyecto_Inventario/public/Employee");


            }

        }).catch(error => {
            console.log(error);
        });
    };

    return (

        <div className="d-flex justify-content-center align-items-center" style={{ height: '50vh' }}  >

            <Form onSubmit={handleSubmit} style={{ fontSize: '1.2em', color: 'black', borderColor: 'black', border: '2px solid black', borderRadius: '8px', boxShadow: '0 0 10px rgba(0, 0, 0, 0.1)', padding: '5%', marginTop: '20%', zIndex: '+1', backgroundColor: 'white' }}>
                <br /><br />
                <Form.Group className="mb-3" controlId="formBasicCheckbox">
                    <Form.Label>InventiKS, keep your stock up to date</Form.Label>
                </Form.Group>

                <Form.Group className="mb-3" controlId="formBasicCheckbox">
                    <Form.Label> <h3>Login</h3> </Form.Label>
                </Form.Group>
                <Form.Group className="mb-3" controlId="formBasicEmail">
                    <Form.Label>Email address</Form.Label>
                    <Form.Control type="email" placeholder="Enter email"
                        name="email" value={formValue.email} onChange={onChange} />
                    <Form.Text className="text-muted">
                        We'll never share your email with anyone else.
                    </Form.Text>
                </Form.Group>

                <Form.Group className="mb-3" controlId="formBasicPassword">
                    <Form.Label>Password</Form.Label>
                    <Form.Control type="password" placeholder="Password"
                        name="password" value={formValue.password} onChange={onChange} />
                </Form.Group>

                <Button variant="primary" type="submit">
                    Log in
                </Button>
                <br /><br />
            </Form>
            <div style={{
                position: 'absolute',
                top: 0,
                left: 0,
                width: '100%',
                height: '100%',
                backgroundImage: `url(${fondologin})`,
                backgroundSize: 'cover',
                backgroundRepeat: 'no-repeat',
                opacity: 0.7,
                zIndex: -1,
            }}>

            </div>

        </div>



    );





}

export default Login;