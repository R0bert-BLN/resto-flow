import apiClient from "@/lib/axios.ts";
import type {AuthResponse, LoginCredentials} from "@/feautres/auth/login/schemas/types.ts";
import type {AxiosResponse} from "axios";
import type {User} from "@/feautres/users/schemas/types.ts";

export const loginService = {
  getCsrf: (): Promise<AxiosResponse> => apiClient.get("/sanctum/csrf-cookie", { baseURL: window.location.origin }),

  getAuthUser: async (): Promise<User|null> => {
    try {
      const response = await apiClient.get("/auth-user");
      return response.data;
    } catch (error: unknown) {
      if (error.response?.status === 401) return null;
      throw error;
    }
  },

  login: async (data: LoginCredentials): Promise<AuthResponse> => {
    await loginService.getCsrf();

    const response = await apiClient.post<AuthResponse>('/login', data);
    return response.data;
  },

  logout: () => apiClient.post('/logout'),
}
