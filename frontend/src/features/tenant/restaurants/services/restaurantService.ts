import type {Restaurant} from "@/features/tenant/restaurants/schemas/types.ts";
import apiClient from "@/lib/axios.ts";
import type {ApiResponse} from "@/types/api.ts";
import type {ApiQueryParams} from "@/lib/queryBuilder.ts";

const API_URL = '/restaurants';

export const restaurantService = {
    getRestaurants: async (params: ApiQueryParams): Promise<ApiResponse<Restaurant[]>> => {
        const response = await apiClient.get<ApiResponse<Restaurant[]>>(`${API_URL}`, {params});
        return response.data;
    },

    getRestaurant: async (id: string): Promise<ApiResponse<Restaurant|null>> => {
      const response = await apiClient.get<ApiResponse<Restaurant|null>>(`${API_URL}/${id}`);
      return response.data;
    }
}
