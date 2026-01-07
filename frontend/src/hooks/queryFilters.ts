import {useCallback, useState} from "react";

export type Filter = number | string | boolean | null;

export const useQueryFilters = <T extends Record<string, Filter>>(initialFilters: T|{} = {}) => {
  const [filters, setFilters] = useState<T|{}>(initialFilters);

  const setFilter = useCallback((key: keyof T, value: Filter) => {
    setFilters((prev) => ({...prev, [key]: value}));
  }, []);

  const resetFilters = useCallback(() => {
    setFilters(initialFilters);
  }, [initialFilters]);

  return {filters, setFilters, setFilter, resetFilters};
}
