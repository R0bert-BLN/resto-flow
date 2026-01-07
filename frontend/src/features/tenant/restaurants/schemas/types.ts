import type {User} from "@/features/users/schemas/types.ts";
import type {Address} from "@/features/address/schemas/types.ts";

export interface Restaurant {
  id: string;
  name: string;
  description?: string | null;
  phone?: string | null;
  logo?: string | null;
  users: User[];
  address: Address;
}
