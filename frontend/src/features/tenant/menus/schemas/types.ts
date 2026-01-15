export interface MenuItem{
  id: string;
  name: string;
  description?: string;
  price: number;
  category_id: string;
  picture?: string;
}

export interface MenuCategory {
  id: string;
  name: string;
  description?: string;
  position?: number;
  items: MenuItem[];
  menu_id: string;
}

export interface Menu {
  id: string;
  name: string;
  description?: string;
  categories: MenuCategory[];
}
