export interface Role {
  id: string;
  name: string;
}

export interface User {
  id: string,
  firstName: string;
  lastName: string;
  email: string;
  roles: Role[],
  phone?: string
}
