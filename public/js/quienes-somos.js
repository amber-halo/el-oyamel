function mostrarDefinicion(object) {
    let titulo = document.getElementById(`titulo-ideario`);
    let definicion = document.getElementById(`definicion-ideario`);
    switch(object.innerText) {
        case 'ALTERNATIVA':
            titulo.innerText = `ALTERNATIVA`;
            definicion.innerText = `Alternativa, que permita a cada miembro desarrollar su potencial con un sentido de compromiso hacia su entorno social y natural centrada en las etapas de desarrollo.`;
            break;
        case 'AMOROSA':
            titulo.innerText = `AMOROSA`;
            definicion.innerText = `Amorosa ya que consideramos que los problemas emocionales empiezan por una carencia amorosa en la vida de una persona (amor a sí mismos, hacia lo que lo rodea o hacia los otros y viceversa; de los otros hacia la persona y de un ambiente amoroso). Consideramos que la manifestación del amor son los valores.`;
            break;
        case 'HOLÍSTICA':
            titulo.innerText = `HOLÍSTICA`;
            definicion.innerText = `Holística, en cuanto a ir nutriendo el modelo de lo que favorezca un desarrollo integral de la persona y de la comunidad.`;
            break;
        case 'INTEGRAL':
            titulo.innerText = `INTEGRAL`;
            definicion.innerText = `Integral, es decir, orientada a la persona entera, cuerpo, emociones, intelecto y espíritu de cada miembro de la comunidad educativa.`;
            break;
        case 'INTEGRADORA':
            titulo.innerText = `INTEGRADORA`;
            definicion.innerText = `Integradora, del niño en sus componentes y del niño en sus relaciones; así como de la comunidad zitacuarense, como país y como habitantes del mundo.`;
            break;
        case 'SUSTENTABLE':
            titulo.innerText = `SUSTENTABLE`;
            definicion.innerText = `Sustentable, dirigida a sensibilizar a los niños y miembros de la comunidad sobre el medio ambiente a través de actividades prácticas, proyectos de impacto positivo y estimulantes del pensamiento, consolidado una manera de ser y de vivir respetuosa y responsable.`;
            break;
    }
}