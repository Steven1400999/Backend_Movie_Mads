import React, { useEffect, useState } from 'react';
import { Button, Container, Row, Col, DropdownButton, Dropdown, Spinner } from 'react-bootstrap';
import axios from 'axios';
import InventoryAdminitem from './InventoryAdminItem';

function InventoryAdmin() {
  const [inventoryData, setInventoryData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get("http://localhost/Proyecto_Inventario/public/api/inventory_index");
        setInventoryData(response.data); 
        console.log(response.data);

      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  if (!inventoryData.length) {
    return (
      <Spinner animation="border" role="status">
        <span className="visually-hidden">Loading...</span>
      </Spinner>
    );
  }
  return (
    <>
     <Row className="mb-3">
  <Col>
    <DropdownButton id="dropdown-product" title="Product">
      {inventoryData.map((inventory) => (
        <Dropdown.Item key={inventory.id} href={`#/product/${inventory.product_id}`}>
          {`${inventory.product_id} - Product Name`} {/* Asegúrate de tener la propiedad 'product_name' en tus datos */}
        </Dropdown.Item>
      ))}
    </DropdownButton>
  </Col>

  <Col>
    <DropdownButton id="dropdown-stock" title="Stock">
      {inventoryData.map((inventory) => (
        <Dropdown.Item key={inventory.id} href={`#/stock/${inventory.stock}`}>
          {inventory.stock}
        </Dropdown.Item>
      ))}
    </DropdownButton>
  </Col>

  <Col>
    <DropdownButton id="dropdown-date" title="Admission Date">
      {inventoryData.map((inventory) => (
        <Dropdown.Item key={inventory.id} href={`#/date/${inventory.admission_date}`}>
          {inventory.admission_date}
        </Dropdown.Item>
      ))}
    </DropdownButton>
  </Col>

  <Col>
    <DropdownButton id="dropdown-supplier" title="Supplier">
      {inventoryData.map((inventory) => (
        <Dropdown.Item key={inventory.id} href={`#/supplier/${inventory.supplier_id}`}>
          {`${inventory.supplier_id} - Supplier Name`} {/* Asegúrate de tener la propiedad 'supplier_name' en tus datos */}
        </Dropdown.Item>
      ))}
    </DropdownButton>
  </Col>

  <Col>
    <Button variant="primary">Eliminar filtros</Button>
  </Col>
</Row>

      <hr />
      <Container fluid>
        <Row className="gap-6">
          {inventoryData.map((inventory) => (
            <InventoryAdminitem
              key={inventory.id}
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
