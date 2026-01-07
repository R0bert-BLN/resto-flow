import type {Restaurant} from "@/feautres/tenant/restaurants/schemas/types.ts";
import apiClient from "@/lib/axios.ts";
import type {ApiResponse} from "@/types/api.ts";

const API_URL = '/restaurants';

export const restaurantService = {
    getRestaurants: async (): Promise<ApiResponse<Restaurant[]>> => {
        const response = await apiClient.get<ApiResponse<Restaurant[]>>(`${API_URL}`);
        return response.data;
    },

    getRestaurant: async (id: string): Promise<ApiResponse<Restaurant|null>> => {
      const response = await apiClient.get<ApiResponse<Restaurant|null>>(`${API_URL}/${id}`);
      return response.data;
    }
}
