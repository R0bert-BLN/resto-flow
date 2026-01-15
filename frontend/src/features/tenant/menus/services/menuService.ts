import type {ApiQueryParams} from "@/lib/queryBuilder.ts";
import type {ApiResponse} from "@/types/api.ts";
import type {Menu} from "@/features/tenant/menus/schemas/types.ts";
import apiClient from "@/lib/axios.ts";
import type {MenuSchema} from "@/features/tenant/menus/schemas/menuSchema.ts";

const API_URL = '/menus';

export const menuService = {
  getMenus: async (params: ApiQueryParams): Promise<ApiResponse<Menu[]>> => {
    const response = await apiClient.get<ApiResponse<Menu[]>>(`${API_URL}`, {params});
    return response.data;
  },

  getMenuById: async (id: string): Promise<ApiResponse<Menu|null>> => {
    const response = await apiClient.get<ApiResponse<Menu|null>>(`${API_URL}/${id}`);
    return response.data;
  },

  createMenu: async (data: MenuSchema): Promise<ApiResponse<Menu>> => {
    const response = await apiClient.post<ApiResponse<Menu>>(`${API_URL}`, data);
    return response.data;
  },

  updateMenu: async (id: string, data: MenuSchema): Promise<ApiResponse<Menu>> => {
    const response = await apiClient.post<ApiResponse<Menu>>(`${API_URL}/${id}`, data);
    return response.data;
  },

  deleteMenu: async (id: string): Promise<void> => {
    await apiClient.delete<ApiResponse<void>>(`${API_URL}/${id}`);
  }
}
