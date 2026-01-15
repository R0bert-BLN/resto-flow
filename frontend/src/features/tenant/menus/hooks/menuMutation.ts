import {useMutation, useQueryClient} from "@tanstack/react-query";
import type {MenuSchema} from "@/features/tenant/menus/schemas/menuSchema.ts";
import type {ApiResponse} from "@/types/api.ts";
import type {Menu} from "@/features/tenant/menus/schemas/types.ts";
import {menuService} from "@/features/tenant/menus/services/menuService.ts";
import {toast} from "sonner";

export const useCreateMenu = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: MenuSchema): Promise<ApiResponse<Menu>> => menuService.createMenu(data),

    onSuccess: (data: ApiResponse<Menu>): void => {
      queryClient.invalidateQueries({queryKey: ["menus"]});
      toast.success("Menu created successfully")
    },

    onError: (error: any): void => {
      toast.error(error.response?.data?.message);
    }
  })
}

export const useUpdateMenu = () => {
  return useMutation({
    mutationFn: (id: string, data: MenuSchema): Promise<ApiResponse<Menu>> => menuService.updateMenu(id, data),

    onSuccess: (data: ApiResponse<Menu>): void => {
      toast.success("Menu updated successfully")
    },

    onError: (error: any): void => {
      toast.error(error.response?.data?.message);
    }
  })
}

export const useDeleteMenu = () => {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (id: string): Promise<void> => menuService.deleteMenu(id),

    onSuccess: (): void => {
      queryClient.invalidateQueries({queryKey: ["menus"]});
      toast.success("Menu deleted successfully")
    },

    onError: (error: any): void => {
      toast.error(error.response?.data?.message);
    }
  })
}
