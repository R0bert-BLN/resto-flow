import {JSX} from "react";
import {useDeleteMenu} from "@/features/tenant/menus/hooks/menuMutation.ts";
import {Trash2} from "lucide-react";
import type {Menu} from "@/features/tenant/menus/schemas/types.ts";

interface ActionsProps {
  menu: Menu;
}

export default function Actions({menu}: ActionsProps): JSX.Element {
  const {mutate: deleteMenu} = useDeleteMenu();

  return (
    <div className="flex items-center justify-center w-full">
      <button
        onClick={(event) => {
          event.preventDefault();
          event.stopPropagation();

          deleteMenu(menu.id);
        }}
        className="p-x rounded-full hover:bg-red-50 transition-colors"
      >
        <Trash2 className="h-5 w-5 text-red-500 hover:text-red-600 cursor-pointer"/>
      </button>
    </div>
  );
}