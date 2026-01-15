import {type JSX, useEffect, useState} from "react";
import {Button} from "@/components/ui/button.tsx";
import {Dialog, DialogContent, DialogTrigger} from "@/components/ui/dialog.tsx";
import MenuForm from "@/features/tenant/menus/components/menuForm.tsx";
import {useDebounce} from "@/hooks/debounce.ts";
import {Search} from "lucide-react";
import {Input} from "@/components/ui/input.tsx";
import type {Filter} from "@/hooks/queryFilters.ts";

interface MenuHeaderProps {
  setFilter: (key: string, value: Filter) => void;
}

export default function MenuHeader({setFilter}: MenuHeaderProps): JSX.Element {
  const [showModal, setShowModal] = useState<boolean>(false);
  const [searchTerm, setSearchTerm] = useState<string>("");
  const debouncedSearch = useDebounce(searchTerm, 500);

  useEffect(() => {
    setFilter("name", debouncedSearch);
  }, [debouncedSearch])

  return (
    <div className="container mx-auto px-5 flex justify-between items-center">
      <div className="relative w-70">
        <Search className="absolute top-2.5 h-4 w-4 text-gray-500"/>
        <Input
          type="search"
          placeholder="Search..."
          className="pl-6 border-0 border-b-2 border-gray-300 bg-transparent shadow-none rounded-none focus-visible:ring-0 focus-visible:border-red-500"
          value={searchTerm}
          onChange={(e) => setSearchTerm(e.target.value)}
        />
      </div>

      <Dialog open={showModal} onOpenChange={setShowModal}>
        <DialogTrigger asChild>
          <Button className="bg-red-600 hover:bg-red-500 cursor-pointer text-white rounded-md w-25">
            <span>add menu</span>
          </Button>
        </DialogTrigger>
        <DialogContent>
          <MenuForm closeModal={() => setShowModal(false)}/>
        </DialogContent>
      </Dialog>
    </div>
  )
}
