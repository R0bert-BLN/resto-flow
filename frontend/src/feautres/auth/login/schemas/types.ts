import {z} from "zod";
import type {LoginSchema} from "@/feautres/auth/login/schemas/loginSchema.ts";
import type {User} from "@/feautres/users/schemas/types.ts";

export type LoginCredentials = z.infer<typeof LoginSchema>;

export interface AuthResponse {
  user: User,
  message: string,
  redirectUrl: string,
}
