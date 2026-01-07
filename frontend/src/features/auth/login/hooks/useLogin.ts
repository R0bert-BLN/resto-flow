import {useNavigate} from "@tanstack/react-router";
import {useMutation, useQueryClient} from "@tanstack/react-query";
import type {AuthResponse, LoginCredentials} from "@/features/auth/login/schemas/types.ts";
import {loginService} from "@/features/auth/login/services/loginService.ts";
import {toast} from "sonner";

export const useLogin = () => {
  const navigate = useNavigate();
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: LoginCredentials): Promise<AuthResponse> => loginService.login(data),

    onSuccess: (data: AuthResponse): void => {
      queryClient.setQueryData(['auth-user'], data.user);
      navigate({to: `${data.redirectUrl}`});
    },

    onError: (error: any): void => {
      const message = error.response?.data?.message;
      toast.error(message);
    }
  })
}
