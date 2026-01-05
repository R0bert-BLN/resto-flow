import {queryOptions, useQuery} from "@tanstack/react-query";
import {loginService} from "@/feautres/auth/login/services/loginService.ts";

export const authUserQueryOptions = queryOptions({
  queryKey: ["auth-user"],
  queryFn: loginService.getAuthUser,
  retry: false,
  staleTime: 30 * 60 * 1000,
});

export const useGetAuthUser = () => {
  const query =  useQuery(authUserQueryOptions);

  return {
    user: query.data,
    isAuthenticated: !!query.data,
    isLoading: query.isLoading,
  }
}
