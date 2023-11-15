import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Container, Row, Col, Carousel } from 'react-bootstrap';
import Foto2 from '../../../public/foto2.jpg';
import Foto3 from '../../../public/foto3.jpg';
import Foto4 from '../../../public/foto4.jpg';
import { useNavigate } from 'react-router-dom';


function Home() {

  const  navigate= useNavigate();

  useEffect(() => {

}, []);

  return (
    <>
      <Container className="mt-5">
        <Row>
          <Col md={{ span: 6, offset: 3 }}>
            <h2 className="text-center">Bienvenido a Inventiks: Optimizando el Control de Inventario</h2>
            <p className="text-center">
              En Inventiks, nos enorgullece presentarte una solución innovadora y eficiente para el control de inventarios. Estamos comprometidos en proporcionar a tu empresa las herramientas necesarias para gestionar y optimizar tu inventario de manera inteligente.
            </p>
            <br />
            <h3 className="text-center">¿Qué es Inventiks?</h3>
            <p className="text-center">
              Inventiks es más que un simple sistema de control de inventarios; es la clave para la eficiencia operativa y la toma de decisiones informada. Nuestra plataforma ha sido diseñada con precisión para satisfacer las demandas cambiantes de tu negocio, ofreciéndote un conjunto completo de características y funcionalidades.
            </p>
          </Col>






        </Row>


        <Carousel style={{ maxHeight: '450px', overflow: 'hidden' }}>
          <Carousel.Item interval={3000}>
            <img
              className="d-block w-100"
              src={Foto4}
              alt="First slide"
              style={{ objectFit: 'cover', objectPosition: 'center' }}

            />
            <Carousel.Caption>
            </Carousel.Caption>
          </Carousel.Item>
          <Carousel.Item interval={3000}>
            <img
              className="d-block w-100"
              src={Foto2}
              alt="First slide"
              style={{ objectFit: 'cover', objectPosition: 'center' }}

            />
            <Carousel.Caption>
            </Carousel.Caption>
          </Carousel.Item>

          <Carousel.Item interval={3000}>
            <img
              className="d-block w-100"
              src={Foto3}
              alt="First slide"
              style={{ objectFit: 'cover', objectPosition: 'center' }}

            />
            <Carousel.Caption>
            </Carousel.Caption>
          </Carousel.Item>
          <Carousel.Item interval={3000}>
            <img
              className="d-block w-100"
              src={Foto2}
              alt="First slide"
              style={{ objectFit: 'cover', objectPosition: 'center' }}

            />
            <Carousel.Caption>
            </Carousel.Caption>
          </Carousel.Item>

        </Carousel>

      </Container>


    </>);
};

export default Home;
