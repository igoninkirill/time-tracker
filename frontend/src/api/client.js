import axios from 'axios';

const apiClient = axios.create({
    baseURL: 'http://your-api-base-url',
    withCredentials: false,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
});

export default apiClient;
