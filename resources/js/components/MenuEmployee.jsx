import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';

import Button from 'react-bootstrap/Button';

import { Link, Outlet } from 'react-router-dom';

function MenuEmployee() {
    return (
        <>
            <Navbar bg="dark" data-bs-theme="dark">
                <Container>
                    <Navbar.Brand as={Link} to="home">InventiKS</Navbar.Brand>
                    <Nav className="me-auto" >
                        <Nav.Link as={Link} to="home">Home</Nav.Link>
                        <Nav.Link as={Link} to="inventory">Inventory</Nav.Link>
                        <Nav.Link as={Link} to="products">Products</Nav.Link>
                        <Button variant="outline-info" as={Link} to="logout" style={{ position: "absolute", right: 200 }}>Logout</Button>{' '}

                    </Nav>
                </Container>
            </Navbar>
            <section>
                <Container>
                    <Outlet>
                    </Outlet>
                </Container>
            </section>
        </>
    );
}

export default MenuEmployee;