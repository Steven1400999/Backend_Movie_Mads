import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import { Link, Outlet, useLocation } from 'react-router-dom';
import Button from 'react-bootstrap/Button';
import React, { useContext } from 'react';
import { Context } from "../Context";

function MenuAdmin() {
    const { token, setGlobalToken, setGlobalRol_id } = useContext(Context);
    const location = useLocation();

    const handleLogout = () => {
        token('');
        setGlobalToken('');
        setGlobalRol_id('');
    };

    return (
        <>
            <Navbar bg="dark" variant="dark" expand="lg">
                <Container>
                    <Navbar.Brand as={Link} to="home">InventiKS</Navbar.Brand>
                    <Navbar.Toggle aria-controls="basic-navbar-nav" />
                    <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="me-auto">
                            <Nav.Link as={Link} to="home" active={location.pathname === '/home'}>Home</Nav.Link>
                            <Nav.Link as={Link} to="inventory" active={location.pathname === '/inventory'}>Inventory</Nav.Link>
                            <Nav.Link as={Link} to="products" active={location.pathname === '/products'}>Products</Nav.Link>
                            <Nav.Link as={Link} to="users" active={location.pathname === '/users'}>Users</Nav.Link>
                        </Nav>
                        <Button variant="outline-info" as={Link} to="logout" onClick={handleLogout}>Logout</Button>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
            <br />
            <Container>
                <Outlet />
            </Container>
        </>
    );
}

export default MenuAdmin;
