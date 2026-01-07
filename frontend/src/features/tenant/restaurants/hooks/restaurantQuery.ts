import {keepPreviousData, useQuery} from "@tanstack/react-query";
import {restaurantService} from "@/features/tenant/restaurants/services/restaurantService.ts";
import type {SortingState} from "@tanstack/react-table";
import {type Filter, useQueryFilters} from "@/hooks/queryFilters.ts";
import {buildQueryParams} from "@/lib/queryBuilder.ts";
import {useQueryPagination} from "@/hooks/queryPagination.ts";
import {useQuerySort} from "@/hooks/querySort.ts";

interface RestaurantQueryParams {
  initialSize?: number;
  initialFilters?: Record<string, Filter>;
  initialSorting?: SortingState;
}

export const useGetRestaurants = ({initialSize, initialFilters, initialSorting}: RestaurantQueryParams) => {
  const pagination = useQueryPagination(initialSize);
  const filters = useQueryFilters(initialFilters);
  const sorting = useQuerySort(initialSorting);
  const queryParams = buildQueryParams({
    pagination: pagination.pagination,
    filters: filters.filters,
    sorting: sorting.sorting
  });

  const query = useQuery({
    queryKey: ["restaurants", queryParams],
    queryFn: () => restaurantService.getRestaurants(queryParams),
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

export const useGetRestaurant = (id: string) => {
  return useQuery({
    queryKey: ["restaurants", id],
    queryFn: () => restaurantService.getRestaurant(id),
    enabled: !!id,
  })
}
