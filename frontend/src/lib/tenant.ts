import apiClient from "./axios.ts";

export const validateCurrentTenant = async () => {
  try {
    await apiClient.get('/check-tenant');
    return true;
  } catch (error: any) {
    return !(error.response?.status === 404 || error.response?.status === 500);
  }
}
