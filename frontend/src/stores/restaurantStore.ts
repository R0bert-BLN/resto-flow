import {create} from "zustand";
import {createJSONStorage, persist} from "zustand/middleware";

interface RestaurantState {
  activeRestaurantId: string | null;
  setRestaurantId: (id: string) => void;
  resetRestaurantId: () => void;
}

export const useRestaurantStore = create<RestaurantState>()(
  persist(
    (set) => ({
      activeRestaurantId: null,
      setRestaurantId: (id) => set({activeRestaurantId: id}),
      resetRestaurantId: () => set({activeRestaurantId: null}),
    }),
    {
      name: 'restaurant-context',
      storage: createJSONStorage(() => localStorage),
    },
  ),
);
