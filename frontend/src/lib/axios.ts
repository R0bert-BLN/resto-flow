import axios, {AxiosError, type InternalAxiosRequestConfig} from "axios";

const apiClient = axios.create({
    baseURL: `${window.location.origin}/api`,
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
    },
    withCredentials: true,
});

apiClient.interceptors.request.use((config) => {
    return config;
});

apiClient.interceptors.response.use(
    (response) => response,
    async (error: AxiosError) => {
        const originalRequest = error.config as InternalAxiosRequestConfig & { _retry?: boolean };

        if (error.response?.status === 419 && !originalRequest._retry) {
            originalRequest._retry = true;

            try {
                await axios.get(`${window.location.origin}/sanctum/csrf-cookie`, {
                    withCredentials: true
                });

                return apiClient(originalRequest);
            } catch (csrfError) {
                return Promise.reject(csrfError);
            }
        }

        if (error.response?.status === 401 && window.location.pathname !== '/login') {
            window.location.href = '/login';
        }

        return Promise.reject(error);
    }
)

export default apiClient;
