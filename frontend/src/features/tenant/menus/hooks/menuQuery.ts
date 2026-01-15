import {keepPreviousData, useQuery} from "@tanstack/react-query";
import type {SortingState} from "@tanstack/react-table";
import {type Filter, useQueryFilters} from "@/hooks/queryFilters.ts";
import {buildQueryParams} from "@/lib/queryBuilder.ts";
import {useQueryPagination} from "@/hooks/queryPagination.ts";
import {useQuerySort} from "@/hooks/querySort.ts";
import {menuService} from "@/features/tenant/menus/services/menuService.ts";

interface MenuQueryParams {
  initialSize?: number;
  initialFilters?: Record<string, Filter>;
  initialSorting?: SortingState;
}

export const useGetMenus = ({initialSize, initialFilters, initialSorting}: MenuQueryParams) => {
  const pagination = useQueryPagination(initialSize);
  const filters = useQueryFilters(initialFilters);
  const sorting = useQuerySort(initialSorting);

  const queryParams = buildQueryParams({
    pagination: pagination.pagination,
    filters: filters.filters,
    sorting: sorting.sorting
  });

  const query = useQuery({
    queryKey: ["menus", queryParams],
    queryFn: () => menuService.getMenus(queryParams),
    placeholderData: keepPreviousData,
  });

  return {
    ...query,
    data: query.data?.data ?? [],
    meta: query.data?.meta,
    links: query.data?.links,
    pagination,
    sorting,
    filters,
  }
}

export const useGetMenuById = (id: string) => {
  return useQuery({
    queryKey: ["menus", id],
    queryFn: () => menuService.getMenuById(id),
    enabled: !!id,
  })
}
