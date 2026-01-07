import type {Restaurant} from "@/features/tenant/restaurants/schemas/types.ts";

export interface UserRole {
  id: string;
  name: string;
}

export interface User {
  id: string,
  firstName: string;
  lastName: string;
  email: string;
  roles: UserRole[];
  phone?: string;
  restaurants?: Restaurant[];
}
