import axios from 'axios';

const api = axios.create({
  baseURL: 'http://api.etapaproductiva.test/api', // URL de tu API
});


// Obtener programas
export const getPrograms = () => api.get('/programs');

// Crear programa
export const createProgram = (programData) => api.post('/programs', programData);

// Exporta otras funciones según las necesidades de tu API
