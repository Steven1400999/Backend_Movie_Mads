import React, { useEffect, useState } from 'react';
import { Button, Container, Row, Col, DropdownButton, Dropdown, Spinner } from 'react-bootstrap';
import axios from 'axios';
import InventoryAdminitem from './InventoryAdminItem';
import { useNavigate } from "react-router-dom";
import ProductAdminCategoriesItem from './ProductAdminCategoriesItem';


function ProductAdminCategories() {
    const [productData, setProductData] = useState([]);

    const navigate = useNavigate();
    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/product_category_index");
                setProductData(response.data);

            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, []);

    

    function closeFormStore() {
        navigate("/Proyecto_Inventario/public/Admin/products");
    }


    function showFormStore(props) {
        navigate("/Proyecto_Inventario/public/Admin/product_categories_store_form");
    }


    if (!productData.length) {
        return (
            <Spinner animation="border" role="status">
                <span className="visually-hidden">Loading...</span>
            </Spinner>
        );
    }

    return (
        <> 
<br />
<br />
<br />
        <Container className='text-center'>
        <Row className="mb-3">   
        <h4 >Product Categories</h4>
        </Row>
        <Row className="mb-3">
        <Col>
            <Button variant="success" onClick={showFormStore}>Create a product category</Button>
        </Col>
        <Col>
            <Button variant="danger" onClick={closeFormStore}>Close</Button>
        </Col>
        </Row>
        

            <hr />
            <Container fluid>
                <Row className="gap-6">
                    {productData.map((product) => (
                        <ProductAdminCategoriesItem
                            key={product.id}
                            id={product.id}
                            name={product.name}
                        />
                    ))}
                </Row>
            </Container>
            
            </Container>
        </>
    );
}

export default ProductAdminCategories;
