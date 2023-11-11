import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';
import { Button, Card, Stack, Spinner, Container, Row } from 'react-bootstrap';
import Card_C from './Card_C';
import axios from 'axios';
import InventoryAdminitem from './InventoryAdminItem';
import InventoryAdminUpdateForm from './InventoryAdminUpdateForm.';

function InventoryAdmin() {
    const [inventoryData, setinventoryData] = useState({})
    useEffect(() => {
        const getUsers = async () => {
            await axios.get("http://localhost/Proyecto_Inventario/public/api/inventory_index")
                .then(function (response) {
                    console.log(inventoryData);
                    setinventoryData(response.data)
                })
                .catch(function (error) {
                    // manejar error
                    console.log(error);
                })
                .finally(function () {
                    // siempre sera executado
                });

        }
        getUsers()
    }, [])

    if (!inventoryData.length) return
    <Spinner animation="border" role="status">
        <span className="visually-hidden">Loading...</span>
    </Spinner>


    return (
        <>

<InventoryAdminUpdateForm/>

            <Container fluid>
                <Row className="gap-6" >
                    {inventoryData.map((inventory) => (
                        <InventoryAdminitem key={inventory.id}
                            id={inventory.id}
                            product_id={inventory.product_id}
                            stock={inventory.stock}
                            admission_date={inventory.admission_date}
                            supplier_id={inventory.supplier_id}
                        />
                    ))}

                </Row>
            </Container>





        </>
    );
}



export default InventoryAdmin;