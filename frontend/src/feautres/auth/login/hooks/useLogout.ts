import {useNavigate} from "@tanstack/react-router";
import {useMutation, useQueryClient} from "@tanstack/react-query";
import {loginService} from "@/feautres/auth/login/services/loginService.ts";
import type {AxiosResponse} from "axios";

export const useLogout = () => {
  const navigate = useNavigate();
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (): Promise<AxiosResponse> => loginService.logout(),

    onSuccess: (): void => {
      queryClient.clear();
      navigate({to: '/login'});
    },
  })
}
