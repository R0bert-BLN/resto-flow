import type {User} from "@/feautres/users/schemas/types.ts";
import type {Address} from "@/feautres/address/schemas/types.ts";

export interface Restaurant {
    id: string;
    name: string;
    description?: string|null;
    phone?: string|null;
    logo?: string|null;
    users: User[];
    address: Address;
}
