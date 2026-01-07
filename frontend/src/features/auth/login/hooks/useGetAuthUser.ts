import {queryOptions, useQuery} from "@tanstack/react-query";
import {loginService} from "@/features/auth/login/services/loginService.ts";
import type {User} from "@/features/users/schemas/types.ts";

export const authUserQueryOptions = queryOptions({
  queryKey: ["auth-user"],
  queryFn: loginService.getAuthUser,
  retry: false,
  staleTime: 30 * 60 * 1000,
});

export const useGetAuthUser = () => {
  const query = useQuery(authUserQueryOptions);

  return {
    user: query.data,
  }
}
